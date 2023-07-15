<?php

namespace App\Services;

class EmailService
{
    private const BLOCKED_EMAILS = [
        'leonor.calaca@gmail.com',
        'jocelynecousineau@videotron.ca',
        'girtalos@yandex.com',
        'no-replyVali@gmail.com',
        'ericjonesmyemail@gmail.com',
        'no.reply.AndreasMercier@gmail.com',
        'hello@getawsses.com',
        'stephen.mallette@bellnet.ca',
        'miquelon@videotron.ca',
        'bestseotools7@gmail.com',
        'georgia.sawtell@hotmail.com',
        'stevecollins@gmail.com',
        'flossie.whittell@gmail.com',
        'ymkz2929@yahoo.co.jp',
        'ludlum.dusty@gmail.com',
        'mikeshoonnangaracy@gmail.com',
        'rolando.strickland@gmail.com',
        'rich@mybizfunding.xyz',
        'mikeImmeli@gmail.com',
        'markwobak@gmail.com',
        'wmueller831@gmail.com',
        'sydatif@devcorpinternationalec.com',
        'beltrankiera116@gmail.com',
        'pius.oberholzer@zlmsg.ch',
        'no.reply.StevenJohansson@gmail.com',
        'mikefetFreerce@gmail.com',
        'archon@g-elec.be',
        'vosborne@charter.net',
        'janselmo5678@gmail.com',
        '54dogwood@gmail.com',
        'jengota325@gmail.com',
        'austin.durham88@gmail.com',
        'ARLINE.TOWNE@bhgrecovery.com',
        'Sheila.Stockstill@bhgrecovery.com',
        'Lxstockstill@gmail.com',
        'Kynvieya.Henderson@bhgrecovery.com',
        'Katie.Rodriguez@bhgrecovery.com',
        'kynvieyahenderson@gmail.com',
        'latasha.jones@bhgrecovery.com',
        'Karon.Cunningham@bhgrecovery.com',
        'rdcampbell8220@hotmail.com',
        'ferreiranoah77@gmail.com',
        'rebecca.blevins@bhgrecovery.com',
        'yolocook36@gmail.com',
        'karoncunningham96@gmail.com',
        'luisarias928@icloud.com',
        'natashabryant0101@gmail.com',
        'teresa.buchanan@bhgrecovery.com',
        'Yolanda.Cook@bhgrecovery.com',
        'lystoncampbell@gmail.com',
        'michaelmourreale1973@gmail.com',
        'titanium@concierge.dreamtrips.com',
        '2565090466@vtext.com',
        'carrie0313@gmail.com',
        '7192298870@vtext.com',
        'garybusy21@gmail.com',
        'lhrubinosky@gmail.com',
        '9107174302@vtext.com',
        '3236308663@vtext.com',
        'locokane17@gmail.com',
        '9192703981@vtext.com',
        'ethandraken64@gmail.com',
        'cariann134@gmail.com',
        'chuckmorter@gmail.com',
        'jennbohigas@gmail.com',
        '3363432415@vtext.com',
        'truedn@gmail.com',
        'bdjohnson929@gmail.com',
        'strobel5@hotmail.com',
        '3366292766@vtext.com',
        'ytmpinb@gmail.com',
        'patriciawiggins74@gmail.com',
        'rich1000@gmail.com',
        '9196314379@vtext.com',
        'cs@postpurchasepro.com',
        'kimunicorn77@gmail.com',
        'laceyballard@hotmail.com',
        'martin.riber.andersen@gmail.com',
        'cindywchu@gmail.com'
    ];

    private const BLOCKED_NAMES = [
        'Roberther'
    ];

    private const BLOCKED_IPS = [

    ];

    public function getBannedEmailsList()
    {
        return self::BLOCKED_EMAILS;
    }

    public function getBannedNamesList()
    {
        return self::BLOCKED_NAMES;
    }

    public function getBannedIPsList()
    {
        return self::BLOCKED_IPS;
    }
}
