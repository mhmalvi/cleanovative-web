export default function Validation() {
    const name = (value) => {
        return value.length > 5 ? true : false;
    };

    return {
        name,
    };
}
