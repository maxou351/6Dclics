<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Support\QuizHelper;

class Quiz extends Component
{
    public string $title;
    public array $questions;
    public string $resultSelector;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title = 'Quel est votre besoin ?',
        string $key = '',
        string $resultSelector = ''
    ) {
        $this->title = $title;
        $this->questions = QuizHelper::get($key);
        $this->resultSelector = $resultSelector;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quiz');
    }
}

