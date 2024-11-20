# Green Social
social media for climate change

## Getting Started
fork project ini

Run <code>git clone https://github.com/stanleymuktar/green-social.git</code>

Run <code>cd green-social</code>

Run <code>composer install</code>

Run <code>cp .env.example .env</code>

Run <code>php artisan key:generate</code>

ganti setting .env database jadi ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=green_social_db
DB_USERNAME=root
DB_PASSWORD=

Run <code>php artisan migrate</code>

Run <code>php artisan db:seed</code>

Run <code>php artisan serve</code>
