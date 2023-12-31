<div>
    @guest
    <div class="comment__input br__8 my-4">
        <textarea wire:model.defer="content" placeholder="Post a comment..." class="w-100 br__8 m-0"></textarea>
        <div class="d-flex justify-content-between align-items-center">
            <p class="error">@error('content') {{ $message }} @enderror</p>
            <button class="primary__button login__button mt-2 mx-0" data-bs-toggle="modal" data-bs-target="#loginModal">Post Comment</button>
        </div>
    </div>
    @else
        <form @auth wire:submit.prevent="save({{ $id }})" @endauth>
            <div class="comment__input br__8 my-4">
                <textarea wire:model="content" placeholder="Post a comment..." class="w-100 br__8 m-0"></textarea>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="error">@error('content') {{ $message }} @enderror</p>
                    <button class="primary__button login__button mt-2 mx-0">Post Comment</button>
                </div>
            </div>
        </form>
    @endguest
</div>
