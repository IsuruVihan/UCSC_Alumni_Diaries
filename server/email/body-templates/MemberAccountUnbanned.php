<?php

function MemberAccountUnbanned($FirstName, $LastName) {
    return "
        Dear ${FirstName} ${LastName},
        
        Your UCSC Alumni member account has been unbanned.
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}