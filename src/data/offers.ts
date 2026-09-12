export interface Offer {
  id: 'orientation' | 'assessment' | 'four-session' | 'six-session';
  label: string;
  name: string;
  price: string;
  duration: string;
  intro: string;
  includes: string[];
  note: string;
  betweenAppointments?: string;
  tone: 'free' | 'assessment' | 'featured' | 'progress';
}

export const offers: Offer[] = [
  {
    id: 'orientation',
    label: 'Orientierung',
    name: 'Orientierungsgespräch',
    price: 'Kostenlos',
    duration: '20 Minuten per Video',
    intro: 'Sie schildern Ihr Anliegen und Ihr Ziel. Gemeinsam klären wir, ob eine Betreuung per Video für Sie fachlich passt.',
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
    label: 'Ersttermin',
    name: 'Online-Ersttermin',
    price: 'CHF 149',
    duration: '60 Minuten per Video',
    intro: 'Wir ordnen Ihren Verlauf, Ihre Belastung und Ihr Ziel ein. Daraus entsteht ein klarer nächster Schritt, den Sie im Alltag prüfen können.',
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
    label: 'Begleitung',
    name: 'Begleitung',
    price: 'CHF 549',
    duration: '4 × 45 Minuten per Video',
    intro: 'Sie verfolgen ein konkretes Ziel über mehrere Termine. Wir beobachten Ihre Reaktion, passen die Belastung an und begleiten Sie auch zwischen den Gesprächen per Messenger.',
    includes: [
      'Vier abgestimmte Videotermine',
      'Ein Bewegungsplan, der zu Ihrem Alltag passt',
      'Belastung zwischen den Terminen beobachten und gemeinsam anpassen',
    ],
    note: 'Voraussetzung ist ein passender Online-Ersttermin.',
    betweenAppointments: 'Messenger für Rückfragen zwischen den Terminen. Zugang erhalten Sie nach Beginn der Begleitung.',
    tone: 'featured',
  },
  {
    id: 'six-session',
    label: 'Fortschritt',
    name: 'Fortschritt',
    price: 'CHF 749',
    duration: '6 × 45 Minuten per Video',
    intro: 'Mehr Zeit für einen schrittweisen Aufbau, etwa für die Rückkehr zu Sport oder belastbarer Alltagsbewegung. Die nächsten Schritte richten sich nach Ihrer Reaktion, nicht nach einem festen Versprechen.',
    includes: [
      'Sechs abgestimmte Videotermine',
      'Ein Plan mit aufeinander aufbauenden Belastungsschritten',
      'Regelmässige gemeinsame Anpassung anhand Ihrer Reaktion',
    ],
    note: 'Voraussetzung ist ein passender Online-Ersttermin.',
    betweenAppointments: 'Messenger für Rückfragen zwischen den Terminen. Zugang erhalten Sie nach Beginn der Begleitung.',
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
