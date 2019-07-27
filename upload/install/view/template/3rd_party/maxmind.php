{{ header }}
<div class="container">
  <header>
    <div class="row">
      <div class="col-sm-6">
        <h3>{{ heading_title }}<br>
          <small>{{ text_maxmind }}</small></h3>
      </div>
      <div class="col-sm-6">
        <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>
      </div>
    </div>
  </header>
  <div class="row">
    <div class="col-sm-12">
      <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        <p>{{ text_signup }}</p>
        <fieldset>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-key">{{ entry_key }}</label>
            <div class="col-sm-10">
              <input type="text" name="fraud_maxmind_key" value="{{ fraud_maxmind_key }}" placeholder="{{ entry_key }}" id="input-key" class="form-control" />
              {% if error_key %}
              <div class="text-danger">{{ error_key }}</div>
              {% endif %} </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-score">{{ entry_score }}</label>
            <div class="col-sm-10">
              <input type="text" name="fraud_maxmind_score" value="{{ fraud_maxmind_score }}" placeholder="{{ entry_score }}" id="input-score" class="form-control" />
              <div class="help">{{ help_score }}</div>
              {% if error_score %}
              <div class="text-danger">{{ error_score }}</div>
              {% endif %} </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>
            <div class="col-sm-10">
              <select name="maxmind_order_status_id" id="input-order-status" class="form-control">
                {% for order_status in order_statuses %}
                {% if order_status.order_status_id == maxmind_order_status_id %}
                <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>
                {% else %}
                <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>
                {% endif %}
                {% endfor %}
              </select>
              <div class="help">{{ help_order_status }}</div>
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>
          <div class="pull-right">
            <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
{{ footer }}
