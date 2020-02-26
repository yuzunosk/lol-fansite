<div class="container">
<form action="/entry/complete" method="post">

<div class="form-group">
    <label for="f-title">Title</label>
    <textarea name="title" class="form-control" id="f-other"></textarea>
</div>

<div class="form-group">
    <label for="f-category_ids">Category</label>
    <select name = "language_ids[]" class = "form-control" id = "f-language_ids" multiple>
    {% for id, name in all_categories_list %}
    <option value = "{{ id }}" >{{ name }}</option>
    {% endfor %}
    </select>
</div>

<div class="form-group">
    <label for="f-body">body</label>
    <textarea name="body" class="form-control" id="f-body"></textarea>
</div>

<div class="form-group">
    <input type="submit" value="send" class="btn" id="btn">
</div>

</form>
</div>
<!----------------------------->
<!-- twig文 解体 -->
<!----------------------------->

<div class="container">
<form action="/entry/complete" method="post">

<div class="form-group">
    <label for="f-title">Title</label>
    <textarea name="title" class="form-control" id="f-other"></textarea>
</div>

<div class="form-group">
    <label for="f-category_ids">Category</label>
    <select name = "language_ids[]" class = "form-control" id = "f-language_ids" multiple>
    <!-- {% for id, name in all_categories_list %} -->
    @for($all_categories_list as $id => $name)
    <option value = "{{ id }}" >{{ name }}</option>
    {% endfor %}
    </select>
</div>