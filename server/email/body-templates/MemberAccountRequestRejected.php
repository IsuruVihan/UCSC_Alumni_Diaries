<?php

function MemberAccountRequestRejected($FirstName, $LastName) {
    return "
        Dear {$FirstName} {$LastName},
        
        Your member account request has been rejected by the top board of UCSC Alumni Association.
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}