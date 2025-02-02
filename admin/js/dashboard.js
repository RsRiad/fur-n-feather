$(document).ready(function() {
    loadData('admin');
    loadData('customer');
});

function showTab(table) {
    $('.tab-content').hide();
    $('#' + table).show();
}

function loadData(table) {
    $.ajax({
        url: '../control/dashboard_control.php',
        type: 'GET',
        data: { table: table },
        success: function(response) {
            let data = JSON.parse(response);
            let tbody = '';
            data.forEach(row => {
                tbody += `<tr>
                    <td>${row.name}</td>
                    <td>${row.email}</td>
                    <td>${row.phone}</td>
                    <td>
                        <button class='update' onclick='openForm("${table}", ${JSON.stringify(row)})'>Edit</button>
                        <button class='delete' onclick='deleteRecord("${table}", ${row.id})'>Delete</button>
                    </td>
                </tr>`;
            });
            $('#' + table + '-table').html(tbody);
        }
    });
}

function openForm(table, record = null) {
    $('#form-modal').show();
    $('#form-title').text(record ? 'Update ' + table : 'Insert ' + table);
    $('#record-id').val(record ? record.id : '');
    $('#name').val(record ? record.name : '');
    $('#email').val(record ? record.email : '');
    $('#phone').val(record ? record.phone : '');
    
    if (table === 'customer') {
        $('#nid').val(record ? record.nid : '');
        $('#address').val(record ? record.address : '');
        $('.customer-fields').show();
    } else {
        $('.customer-fields').hide();
    }
}

function closeForm() {
    $('#form-modal').hide();
}

function submitForm() {
    let table = $('#form-title').text().split(' ')[1];
    let action = $('#record-id').val() ? 'update' : 'insert';
    
    let data = {
        action: action,
        table: table,
        id: $('#record-id').val(),
        name: $('#name').val(),
        email: $('#email').val(),
        phone: $('#phone').val()
    };
    
    if (table === 'customer') {
        data.nid = $('#nid').val();
        data.address = $('#address').val();
    }
    
    $.post('../control/dashboard_control.php', data, function(response) {
        alert(response);
        closeForm();
        loadData(table);
    }).fail(function(xhr) {
        alert('Error: ' + xhr.responseText);
    });
}

function deleteRecord(table, id) {
    if (confirm('Are you sure you want to delete this record?')) {
        $.post('../control/dashboard_control.php', { action: 'delete', table: table, id: id }, function(response) {
            alert(response);
            loadData(table);
        });
    }
}

function searchRecord(table) {
    let id = $('#search-' + table).val();
    if (!id) {
        alert('Please enter an ID to search.');
        return;
    }
    
    $.post('../control/dashboard_control.php', { action: 'search', table: table, id: id }, function(response) {
        let data = JSON.parse(response);
        if (data.error) {
            alert(data.error);
        } else {
            openForm(table, data);
        }
    }).fail(function(xhr) {
        alert('Error: ' + xhr.responseText);
    });
}
