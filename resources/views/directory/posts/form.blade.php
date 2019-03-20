<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    <!-- {!! $errors->first('title', '<p class="help-block">:message</p>') !!} -->
</div>
<div class="form-group">
	<label for="body" class="control-label">{{ 'Slug' }}</label>
	<input class="form-control" id="slugField" name="slug" type="text" value="{{ isset($post->slug) ? $post->slug : ''}}" readonly>	
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
  <label for="body" class="control-label">{{ 'Body' }}</label>
  <textarea id="content" name="body">{{ isset($post->body) ? $post->body : ''}}</textarea>
</div>
<div class="form-group">
    <label class="control-label" for="tokenfield">Tags</label>
    <input type="text" name="tags" id="tokenfield" value="{{ isset($post->tags) ? $post->tags : ''}}"/>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
<script type="text/javascript">
	$(function () {
			// Initialize redactor
            $('#content').redactor({
                imageUpload: '{{ url("/admin/imageUpload/") }}',
                plugins: ['video', 'inlinestyle', 'source', 'alignment', 'table', 'fullscreen', 'fontsize', 'fontcolor'],

            });

            // generate slug
            $("#title").keyup(function(){
			        var Text = $(this).val();
			        Text = Text.toLowerCase();
			        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
			        $("#slugField").val(Text);        
			});

			$('#tokenfield').tokenfield({
            autocomplete: {
                source: [],
                delay: 100,
                focus: function (event, ui) {
                    event.preventDefault();
                },
                select: function(event, ui) {
                    document.activeElement.blur();
                    return false;
                },
            },
            showAutocompleteOnFocus: true
        });
        });
</script>

