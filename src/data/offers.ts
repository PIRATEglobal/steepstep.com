export interface Offer {
  id: 'orientation' | 'assessment' | 'four-session' | 'six-session';
  label: string;
  name: string;
  price: string;
  duration: string;
  intro: string;
  includes: string[];
  note: string;
  tone: 'free' | 'assessment' | 'featured' | 'progress';
}

export const offers: Offer[] = [
  {
    id: 'orientation',
    label: 'Orientierung',
    name: 'Orientierungsgespräch',
    price: 'Kostenlos',
    duration: '20 Minuten per Video',
    intro: 'Der ruhige erste Schritt, um Ihr Anliegen einzuordnen.',
    includes: [
      'Ihr Ziel und Ihre aktuelle Situation besprechen',
      'Klären, ob ein bezahlter Ersttermin sinnvoll ist',
      'Eine erste Einschätzung, ob Video fachlich passen kann',
    ],
    note: 'Keine Untersuchung, keine Diagnose und keine Behandlung.',
    tone: 'free',
  },
  {
    id: 'assessment',
    label: 'Klarheit',
    name: 'Online-Ersttermin',
    price: 'CHF 149',
    duration: '60 Minuten per Video',
    intro: 'Wir schaffen ein belastbares Bild Ihrer Situation und definieren den nächsten Schritt.',
    includes: [
      'Verlauf, Belastung, Alltag und Ziel strukturiert besprechen',
      'Geeignete Bewegungen und sportnahe Aufgaben per Video beobachten',
      'Eine schriftliche Empfehlung für das weitere Vorgehen erhalten',
    ],
    note: 'Die Begleitung beginnt erst danach und nur, wenn sie fachlich passt.',
    tone: 'assessment',
  },
  {
    id: 'four-session',
    label: 'Aufbauen',
    name: 'Begleitung',
    price: 'CHF 549',
    duration: '4 × 45 Minuten per Video',
    intro: 'Für ein klar umrissenes Ziel, das Sie mit regelmässigem Üben verfolgen möchten.',
    includes: [
      'Vier abgestimmte Videotermine',
      'Ein Bewegungsplan, der zu Ihrem Alltag passt',
      'Belastung zwischen den Terminen beobachten und gemeinsam anpassen',
    ],
    note: 'Voraussetzung ist ein passender Online-Ersttermin.',
    tone: 'featured',
  },
  {
    id: 'six-session',
    label: 'Dranbleiben',
    name: 'Fortschritt',
    price: 'CHF 749',
    duration: '6 × 45 Minuten per Video',
    intro: 'Mehr Zeit für einen schrittweisen Aufbau, etwa für die Rückkehr zu Sport oder belastbarer Alltagsbewegung.',
    includes: [
      'Sechs abgestimmte Videotermine',
      'Ein Plan mit aufeinander aufbauenden Belastungsschritten',
      'Regelmässige gemeinsame Anpassung anhand Ihrer Reaktion',
    ],
    note: 'Voraussetzung ist ein passender Online-Ersttermin.',
    tone: 'progress',
  },
];

export const offerPrices = {
  assessment: offers.find((offer) => offer.id === 'assessment')!.price,
  fourSession: offers.find((offer) => offer.id === 'four-session')!.price,
  sixSession: offers.find((offer) => offer.id === 'six-session')!.price,
  orientation: offers.find((offer) => offer.id === 'orientation')!.price,
} as const;

export const offerPerSession = {
  fourSession: 'CHF 137.25',
  sixSession: 'CHF 124.83',
} as const;
