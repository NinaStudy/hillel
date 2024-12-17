<form method="POST" action="">
    <fieldset>
        <legend>Update User</legend>
        <div class="col-sm-5">
            <label for="name" class="form-label mt-4">Edit name</label>
            <input name="name" class="form-control" id="name" placeholder="Edit your name"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="surname" class="form-label mt-4">Edit surname</label>
            <input name="surname" class="form-control" id="surname" placeholder="Edit your surname"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="InputEmail" class="form-label mt-4">Email address</label>
            <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Enter email">
        </div>
        <div class="col-sm-5">
            <label for="phone" class="form-label mt-4">Phone number </label>
            <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"
                   placeholder="Enter phone number">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </fieldset>
</form>