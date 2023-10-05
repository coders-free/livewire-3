<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostCreateForm extends Form
{
    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $content;

    #[Rule('required|exists:categories,id')]
    public $category_id = '';

    #[Rule('required|array')]
    public $tags = [];

    public function save()
    {
        $this->validate();

        $post = Post::create(
            $this->only('title', 'content', 'category_id')
        );

        $post->tags()->attach($this->tags);

        $this->reset();
    }
}
