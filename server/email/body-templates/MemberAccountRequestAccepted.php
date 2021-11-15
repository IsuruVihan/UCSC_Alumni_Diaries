<?php

function MemberAccountRequestAccepted($FirstName, $LastName, $Password) {
    return "
        Dear ${FirstName} ${LastName},
        
        We are happy to inform you that your member account request has been approved by the
        top board of University of Colombo School of Computing Alumni Association. You can use
        this link to log-in to your account. Your default password is mentioned below.
        
        ${Password}
        
        You can change it as your preference once you logged into your account.
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}