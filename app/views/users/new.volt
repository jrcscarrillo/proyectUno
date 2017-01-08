<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("users", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create users
    </h1>
</div>

{{ content() }}

{{ form("users/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        {{ text_field("name", "size" : 30, "class" : "form-control", "id" : "fieldName") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {{ text_field("email", "size" : 30, "class" : "form-control", "id" : "fieldEmail") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        {{ select_static("password", "using": [], "class" : "form-control", "id" : "fieldPassword") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldMustchangepassword" class="col-sm-2 control-label">MustChangePassword</label>
    <div class="col-sm-10">
        {{ select_static("mustChangePassword", "using": [], "class" : "form-control", "id" : "fieldMustchangepassword") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldProfilesid" class="col-sm-2 control-label">ProfilesId</label>
    <div class="col-sm-10">
        {{ text_field("profilesId", "type" : "numeric", "class" : "form-control", "id" : "fieldProfilesid") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldBanned" class="col-sm-2 control-label">Banned</label>
    <div class="col-sm-10">
        {{ select_static("banned", "using": [], "class" : "form-control", "id" : "fieldBanned") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldSuspended" class="col-sm-2 control-label">Suspended</label>
    <div class="col-sm-10">
        {{ select_static("suspended", "using": [], "class" : "form-control", "id" : "fieldSuspended") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldActive" class="col-sm-2 control-label">Active</label>
    <div class="col-sm-10">
        {{ select_static("active", "using": [], "class" : "form-control", "id" : "fieldActive") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
