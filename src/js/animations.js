// Init word animation.
export function initWordAnimation() {
	const title = document.querySelector('.header__animation');

	setTimeout( function() {
		hideCurrentWord( title.querySelector('.visible') )
	}, 2500);
}

// Hide current word.
function hideCurrentWord(currentWord) {
	var nextWord = takeNextWord(currentWord);

	switchWords(currentWord, nextWord);

	setTimeout( function() {
		hideCurrentWord(nextWord)
	}, 2500);
}

// Take next word.
function takeNextWord(currentWord) {
	if ( ! currentWord.nextElementSibling ) {
		return currentWord.parentNode.children[0];
	} else {
		return currentWord.nextElementSibling;
	}
}

// Switch words.
function switchWords(currentWord, nextWord) {
	currentWord.classList.remove('visible');
	currentWord.classList.add('hidden');

	nextWord.classList.remove('hidden');
	nextWord.classList.add('visible');
}
