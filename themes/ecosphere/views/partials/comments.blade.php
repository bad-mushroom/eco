<section class="mb-5">
    <div class="card bg-light">
        <div class="card-body">

            <form action="{{ route('comments.store', $story) }}" method="post" class="mb-4">
                @csrf
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="body">Comment</label>
                        <textarea class="form-control" name="body" id="body" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="author">Your Name</label>
                        <input type="text" class="form-control" name="author" id="author" value="Anonymous Toad" />
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary text-light mt-3">Leave Comment</button>
                    </div>
                </div>
            </form>

            <hr>

            <div class="d-flex mb-4 row">
                @forelse ($comments as $comment)
                    @include('partials.comment')
                @empty
                    No comments to show
                @endforelse
            </div>
        </div>
    </div>
</section>