<form method="POST" action="">
    <fieldset>
        <legend>Create User</legend>
        <div class="col-sm-5">
            <label for="name" class="form-label mt-4">Name</label>
            <input name="name" class="form-control" id="name" placeholder="Enter your name"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="surname" class="form-label mt-4">Surname</label>
            <input name="surname" class="form-control" id="surname" placeholder="Enter your surname"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="InputEmail" class="form-label mt-4">Email address</label>
            <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Enter email">
        </div>
        <div class="col-sm-5">
            <label for="phone" class="form-label mt-4">Phone number </label>
            <input type="tel" name="phone" class="form-control" id="phone"
                   pattern="(+38[0-9]{3})[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="Format: +38(123)456-78-90">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </fieldset>
</form>