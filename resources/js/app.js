//serve per avviare laravel e non centra nulla con il framework bootstrap
import './bootstrap';

//includi scss
import '~resources/scss/app.scss';

// import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

//questo serverà nel momento in cui verrà compilato il build poichè senza quest'applicativo in produzione le immagini non verranno visualizzate
import.meta.glob([
    '../img/**'
    //per visualizzare le immagini in blade usare la seguente riga(<img src="{{ Vite::asset('resources/img/immagine_da_inserire)}}")
])
