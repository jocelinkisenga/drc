<div>
    <form method="get" class="custom-form mt-3 pt-2 mb-lg-0 mb-3" role="search">
        <div class="input-group input-group-lg">
            <span class="input-group-text bi-search" id="basic-addon1">

            </span>

            <input wire:model.debounce.5OOms="keyword" type="search" class="form-control" id="keyword" placeholder="cherche ton endroit..." aria-label="Search">

            {{-- <button type="submit" class="form-control"> <span class="text-primary">che</span>
                <span class="text-warning">r</span>
                <span class="text-danger">che</span></button> --}}
        </div>
    </form>
    @if (sizeof($searchPosts) > 0)
    <div class="dropdown-menu d-block py-0  mt-1">

        @foreach ($searchPosts as $search)
        <div class="px-3 py-1  border-bottom mb-lg-0">

            <div class="d-flex flex-column ml-3">
                <a class="dropdown-item" href="{{ route("posts.show", ["slug" => $search->slug]) }}">{{ $search->title }}</a>

            </div>


        </div>

        @endforeach
    </div>

    @endif



</div>
