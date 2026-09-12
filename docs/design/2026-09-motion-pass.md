# Motion pass, 12 September 2026

The site uses motion as orientation and feedback. Article sections, feature images and process diagrams enter with a short upward settle when they approach the viewport. This is opt-in through the shared layout observer and leaves content visible if JavaScript or IntersectionObserver is unavailable, so a slow or restricted browser never loses information.

Process diagrams use a sequential node reveal because the nodes represent the order of care. Offer cards lift only for pointer hover or keyboard focus, and their price shifts by a barely visible amount to give the interaction a physical response. Buttons keep their existing lift and press states. Selected large editorial, sport and condition images breathe through a barely perceptible 1.2% scale over 20 seconds, while pointer hover pauses that movement for a more direct tactile response. Images do not zoom the subject out of context.

The legal, FAQ and long-form content remains readable immediately. There is no blanket hidden state, looping animation, scroll hijacking, library dependency or hover-only meaning. Every effect is disabled or made static under `prefers-reduced-motion: reduce`, and touch devices do not receive hover transforms.
