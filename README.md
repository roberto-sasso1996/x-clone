# Clone X
All'interno di questo progetto stiamo utilizzando Laravel, Vue, Inertia e Tailwind.
Per poterlo clonare e provare
Una volta clonato ed avver effettuato l'accesso nella cartella del progetto


1. Installiamo Composer
```
composer install
```
2. Copiamo .env
```
cp .env.example .env
```
3. Generare la chiave dell'applicazione
```
php artisan key:generate
```
4. Configurare il file .env con le informazioni del database e altre impostazioni necessarie

5. Eseguire le migrazioni 
```
php artisan migrate
```
6. Installiamo npm
```
npm install
```

Ora dovrebbe essere tutto apposto, lanciamo ```php artisans serve``` e ```npm run dev``` e visualizziamo il progetto sul Browser