{{-- resources/views/components/quiz.blade.php --}}
@if (count($questions))
<div id="quiz" class="component-quiz" data-component="quiz" data-result-selector="{{ $resultSelector }}">
    <div class="component-quiz__container">
        <h2 class="component-quiz__title">{{ $title }}</h2>

        @foreach ($questions as $index => $question)

            <div 
              id="quiz-step-{{ $index + 1 }}" 
              class="component-quiz__step {{ $index > 0 ? 'hidden' : '' }}" 
              data-step="{{ $index + 1 }} scroll-mt-24"
              role="region" 
              aria-labelledby="quiz-step-{{ $index + 1 }}-label">
                
                @if ($index > 0)
                    <div id="previous-answer-{{ $index + 1 }}" class="component-quiz__previous-answer mb-4 text-sm text-gray-600 italic"></div>
                @endif

                <div class="w-full mb-4">
                    <div class="flex justify-between text-xs text-primary mb-1 px-1">
                        <span id="quiz-progress-text-{{ $index + 1 }}">Question {{ $index + 1 }} sur {{ count($questions) }}</span>
                        <span id="quiz-progress-percent-{{ $index + 1 }}">{{ round((($index + 1) / count($questions)) * 100) }}%</span>
                    </div>
                    <div class="w-full bg-primary/10 h-2 rounded-full overflow-hidden">
                        <div id="quiz-progress-bar-{{ $index + 1 }}" class="h-full bg-primary transition-all duration-300 ease-in-out" style="width: {{ round((($index + 1) / count($questions)) * 100) }}%"></div>
                    </div>
                </div>

                <p class="component-quiz__question">{{ $question['text'] }}</p>
                <div class="component-quiz__answers">
                    @foreach ($question['answers'] as $value => $label)
                        <button 
                            class="component-quiz__btn" 
                            data-value="{{ $value }}"
                            data-question="{{ $index + 1 }}"
                            type="button" 
                            aria-label="{{ $label }}"
                        >
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                @if ($index > 0)
                    <button type="button" class="component-quiz__btn-return mt-6 inline-flex items-center gap-2 px-4 py-2 bg-white text-primary border border-primary rounded-lg hover:bg-primary hover:text-white transition-colors">
                        <x-heroicon-o-arrow-left class="w-4 h-4" />
                        Retour
                    </button>
                @endif
            </div>
        @endforeach
    </div>
</div>
@else
    <div role="alert">
        <p class="component-quiz__error">⚠️ Aucun quiz trouvé pour ce composant.</p>
    </div>
@endif
