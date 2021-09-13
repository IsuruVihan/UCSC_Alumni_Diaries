const wordList = [
    {
        id: 'accounts-description',
        words: [
            'Account Requests',
            'Rejected Requests',
            'Registered Members',
            'Banned Accounts'
        ]
    },
    {
        id: 'reports-description',
        words: [
            'Post Reports',
            'Comment Reports'
        ]
    },
    {
        id: 'subscriptions-description',
        words: [
            'Subscriptions to be accept',
            'Subscriptions done',
            'Subscription status'
        ]
    },
    {
        id: 'spendings-description',
        words: [
            'Cash spent',
            'Items spent'
        ]
    },
    {
        id: 'inventory-description',
        words: [
            'Available assets',
            'Transferred assets',
            'Assets to be accept',
            'Assets received',
            'Subscriptions'
        ]
    }
];

const setDescription = (id) => {
    let words;
    wordList.map((set) => {
        if (set.id === id) {
            words = set.words;
        }
    });
    return displayDescription(id, words);
}

const displayDescription = (id, words) => {
    const element = document.getElementById(id);
    words.map((word) => {
        setTimeout(function () {
            element.innerHTML = word;
        }, 1500);
    });
}