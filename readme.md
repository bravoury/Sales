Lavalite package that provides sales management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `tadascript/sales`.

    "tadascript/sales": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Tadascript\Sales\Providers\SalesServiceProvider::class,

And also add it to alias

    'Sales'  => Tadascript\Sales\Facades\Sales::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Tadascript\\SalesTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Tadascript\Sales\Providers\SalesServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Tadascript\Sales\Providers\SalesServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Tadascript\Sales\Providers\SalesServiceProvider" --tag="view"


## Usage


