<div class="row">
    <div class="col-md-3">
        <form method="post" action="index.php">
            <button name ="logout" value="1" class="btn btn-primary wellcome"><span>Logout</span></button>
        </form>
    </div>
    <div class="col-md-9">
        <div class="alert-success">{{msg}}</div>
    </div>

</div>
<div class="row">
    <div class="col-md-3">
        <div class="small">
            {% for row in tables %}
                <div><h4>Таблица {{row.table}}</h4></div>
                {% for column in row.column %}
                    <div>{{column}}</div>
                {% endfor %}
            {% endfor %}
        </div>
    </div>
    <div class="col-md-9">
        <form method="post" action="index.php">
            <label for="sql">SQL запрос </label><br>
            <textarea rows="10" cols="130" name="sql">{{sql}}</textarea><br>
            <input type="submit" value="Send request" class="btn btn-primary"/>
        </form>
        <div class="alert-warning">{{sqlmsg}}</div>
        <div class="alert-success small">
        {% for i in 0..4 %}
            <p>{{session.sql[i]}}</p>
        {% endfor %}
        </div>
        <table class="table table-bordered" width="100%">
            <tr>
                {% for column in namereq %}
                    <td><b>{{column.name}}</b></td>
                {% endfor %}
            </tr>
            {% for row in req %}
                <tr>
                    {% for column in row %}
                        <td>{{column}}</td>
                    {% endfor %}
                </tr>
            {% endfor %}
        </table>
    </div>
</div>
