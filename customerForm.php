<div class="title mb-4">
    <h3> New Customer</h3>
</div>
<form method="post" action="" id="customerForm">
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Forename" autofocus="">

    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="surname" placeholder="Surname" autofocus="">

    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">

    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Address">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="telephone" placeholder="Phone number">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text"
                   for="inputGroupSelect01">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="gender">
            <option selected>Choose...</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
        </select>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="note" rows="3" placeholder="Customer note"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" id="submitFormBtn">Save</button>
</form>

