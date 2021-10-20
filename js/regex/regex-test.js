const lowercaseTest = (string) => {
    const pattern = new RegExp("(?=.*[a-z])");
    return pattern.test(string);
}

const uppercaseTest = (string) => {
    const pattern = new RegExp("(?=.*[A-Z])");
    return pattern.test(string);
}

const numericTest = (string) => {
    const pattern = new RegExp("(?=.*\\d)");
    return pattern.test(string);
}

const specialTest = (string) => {
    const pattern = new RegExp("(?=.*[-+!@#$&%^*?])");
    return pattern.test(string);
}