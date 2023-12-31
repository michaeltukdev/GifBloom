<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Comments;
use Livewire\Attributes\On; 

class CommentList extends Component
{
    public $id;
    public $comments;

    public function mount() {
        $this->comments = Comments::where('post_id', $this->id)->get();
    }

    #[On('comment-created')] 
    public function updateCommentList($postId)
    {
        $this->comments = Comments::where('post_id', $postId)->get();
    }

    public function delete($id)
    {
        $comment = Comments::find($id);

        if($comment->user_id === auth()->user()->id) {
            $comment->delete();
        }

        $this->comments = Comments::where('post_id', $this->id)->get();
    }

    public function render()
    {
        return view('livewire.post.comment-list');
    }
}
