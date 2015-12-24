<h1 class="title">Regisration</h1>
<form action="/user/registration"  method="post">
    <div class="form-group">
        <label for="email">Write your email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="name">Write your Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="age">Write your age</label>
        <input type="text" name="age" class="form-control" id="age" placeholder="Age">
    </div>
    <div class="form-group">
        <label for="password">Write your password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="agree"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Sign up now</button>
</form>