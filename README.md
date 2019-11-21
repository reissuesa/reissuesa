Reissuesa on Reissuesan matkablogille kehitetty WordPress-teema. Teeman tekeminen oli osa Esa Isopahkalan TAMK:n opinnäytetyötä WordPress-aloitusteeman valinta ja kehittäminen.

Aloitusteemana on käytetty <a href="https://github.com/aucor/aucor-starter">Aucor Starteria</a>, johon on lisätty CSS Grid -tuki Digitoimisto Duden aloitusteemasta <a href="https://github.com/digitoimistodude/air-light">Air Lightista</a>.

Reissuesa-teema on nähtävissä tuotantokäytössä Reissuesan matkablogissa osoitteessa https://www.matkablogi.fi/:

- etusivu on toteutettu front-page.php:llä, blogin indeksi home.php:llä
- arkistonäkymien ruudukkolayout on tehty CSS Gridillä
- etusivulla on listaukset paitsi uusimmista postauksista myös suosituimpien kategorioiden (maanosien tai maiden) uusimmista postauksista sekä kaikkien aikojen luetuimmista postauksista
- tiisereissä käytetään poimintoja, otsikkokuvan puuttuessa käytetään oletuskuvaa, tiiserikuvat samaa kuvasuhdetta css:llä
- suosituimmilla kategorioilla omia sivupohjia, esim. category-vali-amerikka.php sisältää postauslistauksen lisäksi kartan
- suosituimmat kategoriat ja tagit näyttävät oman hero-kuvansa arkistolistauksessa (partials/content/hero-archive.php)
- vimpainalueita (sidebar) on 4 kpl, otettuna käyttöön esim. sivupohjan page-sidebar-about.php kautta
- yksittäisten postausten edellinen ja seuraava postaus -linkit varustettu pikkukuvilla
- kuvien näyttämisessä on Lazy Loading aktivoituna
- käyttöliittymässä kaikki suomen kielellä jos kieleksi valittu suomi (muuten englanniksi)
- fontteina on käytetty Google-fontteja Open Sans ja Montserrat
- kommentit on muotoiltu isoilla pyöreillä (gr)avatareilla ja puhekuplilla

Sivuston matkablogi.fi -suorituskykytestit 13.11.2019:

- Google Page Insights 80/98 (mobiili/työpöytä)
- GTMetrix 93/79 (PageSpeed/YSlow)
- Pingdom Tools 83
- WebPageTest 5 x A, 5.49 s täysin latautunut

Teemanhyväksyntätesti Theme Check -pluginilla:

- WordPress.org, vaatimukset täytetään, mutta 10 varoitusta
- ThemeForest, vaatimukset täytetään, mutta 7 varoitusta

Reissuesan matkablogissa on käytössä 17 ilmaista pluginia:

- Akismet-roskaviestisuodatus
- AMP (AMP-projektin virallinen plugin)
- Aucor Core (Aucor Starterin toiminnallisuuden säätely)
- Envira Gallery Lite (galleriasovellus käytössä joissakin vanhoissa postauksissa)
- Featured Images in RSS for Mailchimp & Other Email (lisää otsikkokuvan Feedburnerin RSS:ään)
- Glue for Yoast SEO & AMP (varmistaa AMP-pluginin käyttävän Yoast-pluginin metadataa)
- Regenerate thumbnails (käytössä vain kun pikkukuvien määrityksiä muutetaan)
- RS FeedBurner (WordPressin natiivin RSS:n sijaan käyttöön monipuolisempi Google FeedBurner)
- Site Kit by Google (Googlen palveluiden integrointi)
- Smart Slider 3 (etusivun kuvakarusellin toteutus)
- Smash Balloon Instagram Feed (etusivun Instagram-tilin mainoksen totetutus
- Subscribe to Comments Reloaded (kommentoijat voivat tilata ilmoitukset uusista kommenteista)
- Ultimate Tag Cloud Widget (alapalkin muokattava avainsanapilvi)
- WebP Express (nopeammin latautuvat webp-kuvat käyttöön)
- WordPress Related Posts (aiheeseen liittyvien postausten linkit)
- WP Super Cache (välimuisti nopeuttamaan sivunlatausta)
- Yoast SEO (hakukoneoptimointi, sisältää myös sivukartan)

Käytössä on myös yksi maksullinen plugin:

- Advanced Custom Fields PRO (kartta käydyt maat -sivulla)
