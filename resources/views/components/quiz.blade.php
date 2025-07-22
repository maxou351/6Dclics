{{-- resources/views/components/quiz.blade.php --}}
@if (count($questions))
<div id="quiz" class="component-quiz" data-component="quiz" data-result-selector="{{ $resultSelector }}">
    <div class="component-quiz__container">
        <h2 class="component-quiz__title">{{ $title }}</h2>

        @foreach ($questions as $index => $question)

            <div id="quiz-step-{{ $index + 1 }}" class="component-quiz__step {{ $index > 0 ? 'hidden' : '' }}" data-step="{{ $index + 1 }}">
                
                @if ($index > 0)
                    <div id="previous-answer-{{ $index + 1 }}" class="component-quiz__previous-answer mb-4 text-sm text-gray-600 italic"></div>
                @endif
                
                <p class="component-quiz__question">{{ $question['text'] }}</p>
                <div class="component-quiz__answers">
                    @foreach ($question['answers'] as $value => $label)
                        <button 
                            class="component-quiz__btn" 
                            data-value="{{ $value }}"
                            data-question="{{ $index + 1 }}"
                        >
                            {{ $label }}
                        </button>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
<p class="component-quiz__error">⚠️ Aucun quiz trouvé pour ce composant.</p>
@endif
