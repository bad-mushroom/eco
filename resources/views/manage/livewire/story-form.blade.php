<form>
    <div class="row">
        <div class="col-lg-8 col-md-9 col-sm-12">
            @include('manage.partials.alerts')

            <section id="story-create">
                <x-header header="Details" size="5" classes="pb-3" />

                @includeIf('manage.partials.forms.' . $type)

                <div class="mb-3 text-end">
                    <button type="button" class="btn btn-secondary text-light" wire:click="saveDraft">
                        <i class="bi bi-cloud me-2"></i>Save Draft
                    </button>
                    <button type="button" class="btn btn-success text-light" wire:click="publish">
                        <i class="bi bi-cloud-fill me-2"></i>Save and Publish
                    </button>
                </div>
            </section>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-12">

            <section id="story-meta">
                <x-header header="Meta" size="5" classes="pb-2" />
                <div class="mb-3">
                    <label for="type" class="form-label required">Story Type</label>
                    <select class="form-control" id="type" aria-describedby="typeHelp" wire:model="type">
                        @foreach ($storyTypes as $type)
                        <option value="{{ $type->slug }}">{{ $type->label }}</option>
                        @endforeach
                    </select>
                    <div id="typeHelp" class="form-text text-muted">Each story type has its own template</div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="form-check">
                        <input wire:model="isFeatured" class="form-check-input" type="checkbox" value="1" id="featured-story"
                            aria-describedby="featured-story-help">
                        <label class="form-check-label" for="featured-story">Featured Story?</label>
                    </div>
                    <div id="featured-story-help" class="form-text text-muted">Featured stories can be shown at the top of all other
                        stories</div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input wire:model="allowComments" class="form-check-input" type="checkbox" value="1" id="allow_comments"
                            aria-describedby="allow_comments-help">
                        <label class="form-check-label" for="allow_comments">Allow Comments?</label>
                    </div>
                    <div id="allow_comments-help" class="form-text text-muted">Allow commenting for this story</div>
                </div>
            </section>

            <section id="story-image">
                <x-header header="Featured Image" size="5" classes="pb-2" />
                <div class="mb-3">
                    <label for="featured-image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="featured-image" aria-describedby="featuredImageHelp">
                    <div id="featuredImageHelp" class="form-text"></div>
                </div>
            </section>

            <section id="story-tags">
                <x-header header="Tags" size="5" classes="pb-2" />
                <div class="mb-3">
                    <textarea class="form-control" name="tags" rows="2" wire:model="tags" aria-describedby="tagsHelp"></textarea>
                    <div id="tagsHelp" class="form-text">Comma seperated values</div>
                </div>
            </section>
        </div>
    </div>
</form>
