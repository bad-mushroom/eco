<div class="col-lg-6">
    <button type="button" name="preview" class="btn btn-secondary text-light"><i class="fas fa-eye me-2"></i>Preview</button>
</div>
<div class="col-lg-6 text-end">
    @if ($story)
        @if ($story->published_at)
            <button type="submit" name="unpublish" class="btn btn-secondary text-light"><i class="fas fa-cloud me-2"></i>Convert to Draft</button>
            @else
            <button type="submit" name="draft" class="btn btn-secondary text-light"><i class="fas fa-cloud me-2"></i>Save Changes</button>
        @endif
    @else
        <button type="submit" name="draft" class="btn btn-secondary text-light"><i class="fas fa-cloud me-2"></i>Save Draft</button>
    @endif

    <button type="submit" name="publish" class="btn btn-success text-light"><i class="fas fa-cloud me-2"></i>Save and Publish</button>
</div>