<?php

function MemberAccountRemoved($FirstName, $LastName) {
    return "
        Dear ${FirstName} ${LastName},
        
        Your UCSC Alumni member account has been removed by the Top-board of the association.
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}