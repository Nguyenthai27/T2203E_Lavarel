<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Student</span>
    </a>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Student information</h3>
        </div>
        <form method="post" action="{{url("/addStudent")}}" role="form" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="name" class="form-control" required >
                </div>
                <div class="form-group">
                    <label>Student Age</label>
                    <input type="number" min="18" max="50" name="age" class="form-control" required >
                </div>
                <div class="form-group">
                    <label>Student Address</label>
                    <input type="text" name="address" class="form-control" required >
                </div>
                <div class="form-group">
                    <label>Student Telephone</label>
                    <input type="text" name="telephone" class="form-control" required >
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</aside>
