$(document).ready(function () {

    // Add new customer
    $("#customerForm").on("submit", function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "getFormResponse.php",
            data: data,
            dataType: 'json',
            error: function (xhr, status) {
                alert('please fill the form');
            },
            success: function (response) {
                const message = JSON.stringify(response);
                alert(message);
                $("#customerForm").find("input[type=text], input[type=email], textarea").val("");
            }

        });

    });

    // Search function.
    $('#searchForm').on('submit', function (e) {
        const data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: 'getSearchResponse.php',
            data: data,
            success: function (response) {
                if ($.isEmptyObject(response)) {
                    alert('not found')
                    return;
                }
                createTable(response);
            },
            dataType: 'json'
        });
        e.preventDefault();
    });

    addEventsForEditBtns();
});


// create table with given search results from the database
function createTable(data) {
    $('.table tbody').empty();
    $.each(data, function (index, value) {
        let note = value['note'];
        if (typeof note === 'undefined') note = 'n/a';
        $('.table tbody').append(
            '<tr><td>' + value['customer_id'] +
            '</td><td>' + value['name'] +
            '</td><td>' + value['surname'] +
            '</td><td>' + value['address'] +
            '</td><td>' + value['telephone'] +
            '</td><td>' + value['email'] +
            '</td><td>' + value['gender'] +
            '</td><td>' + note
        );
        // block of buttons to modify customer info
        $('tbody tr:last-child').append(
            $("<td class='d-flex justify-content-around'>" +
                "<button type=\"button\" class=\" btn btn-primary btn-sm editCustomerBtn\">Modify</button>" +
                "<button type=\"button\" class=\" btn btn-danger btn-sm cancelCustomerBtn d-none\">Cancel</button>" +
                "</td>")
        );

    });
    addEventsForEditBtns();
}

// appends event listeners to modify, save and cancel buttons in the edit column
function addEventsForEditBtns() {
    $('.editCustomerBtn').on('click', function () {
        if ($(this).hasClass('saveCustomerBtn')) {
            const $row = $(this).closest('tr'),
                $tds = $row.find('td').not(':last');
            let data = [];
            let isDataComplete = true;
            $.each($tds, function (key, value) {
                if (value.innerHTML !== "") {
                    data.push(value.innerHTML);
                } else {
                    alert('all data mandatory. try again!');
                    isDataComplete = false;
                }
            });
            if (!isDataComplete) return;
            data = JSON.stringify(data);
            $.ajax({
                type: "POST",
                url: 'getEditCustomerResponse.php',
                data: {
                    data: data,
                },
                success: function (response) {
                    alert(response);
                },
            });
            $(this).text("Modify").removeClass('saveCustomerBtn');
            $('.cancelCustomerBtn').addClass('d-none').removeClass('d-block');
            $.each($tds, function () {
                $tds.attr('contenteditable', 'false').css({});
            });
        } else {
            $(this).text("Save").addClass('saveCustomerBtn');
            $('.cancelCustomerBtn').addClass('d-block').removeClass('d-none');
            const $row = $(this).closest('tr');
            $tds = $row.find("td").not(':last');
            $.each($tds, function () {
                $tds.attr('contenteditable', 'true').css({});
            });
        }
    });

    $('.cancelCustomerBtn').on('click', function () {
        const $row = $(this).closest('tr'),
            $tds = $row.find("td").not(':last');
        $.each($tds, function () {
            $tds.attr('contenteditable', 'false').css({});

        });

        $('.cancelCustomerBtn').addClass('d-none').removeClass('d-block');
        $('.saveCustomerBtn').text("Modify").removeClass('saveCustomerBtn');
    });

}






