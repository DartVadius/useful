{% extends "layout.tpl" %}
{% block login %}
<div class="page-header">
    <div class="row">
        <div class="col-md-3">
            <form method="post" action="index.php" class="login">
                <div class="form-group field">
                    <label for="login">Database </label>
                    <input type="text" name="bd" size="20" value="{{session.bd}}" required/><br>
                    <label for="login">Login </label>
                    <input type="text" name="login" size="20" value="{{session.log}}" required/><br>
                    <label for="password">Password </label>
                    <input type="password" name="password" size="20"/><br>                    
                    <input type="submit" value="Login" class="btn btn-primary"/>
                </div>
            </form>
        </div>
        <div class="col-md-9">
            <div class="alert-warning">{{error}}</div>
        </div>        
    </div> 
</div>          
{% endblock %}