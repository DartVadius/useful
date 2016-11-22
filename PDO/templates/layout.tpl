{% include 'header.tpl' %}
{% if session.logged %}
    {% include 'work.tpl' %}
{% else %}
    {% block login %}{% endblock %}
{% endif %}
{% include 'footer.tpl' %}