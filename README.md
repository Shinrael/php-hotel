php-hotel
===
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
### Svolgimento
1. Inizio con il copiare e passare nel mio file l'array degli hotel.
2. Tramite un foreach creo un ciclo per stampare tutte le informazioni dell'array dentro il mio HTML.
3. Tramite l'utilizzo di un operatore ternario utilizzo un if per il valore del parcheggio: se è true allora è 'si', al contrario 'no'.
## Bonus
1. Tramite un if controllo che la checkbox sia checckata tramite il valore '1' e controllo che il valore parking esista con isset. Dopodichè filtro tramite una funzione gli hotel con il parcheggio e li pusho dentro il mio nuovo array con gli hotel filtrati. A questo punto modifico il foreach creato inserendo il nome dell'array con gli hotel filtrati al posto di quello base.