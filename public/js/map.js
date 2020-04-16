// Generate dom elements
const boxes = [
    ['.box-wrap.boxes', 400]
];

for (const [sel, items] of boxes) {
    const container = document.querySelector(sel);

    for (let i = 0; i < items; i++) {
        container.appendChild(
            document.createElement('div')
        );
    }
}

const clr = ["white", "silver", "black", "red", "orange", "yellow", "green", "blue", "deepswkyblue", 'purple'];

// Initialize selectionjs
const selection = Selection.create({
    class: 'selection',
    selectables: ['.box-wrap > div'],
    boundaries: ['.box-wrap']
}).on('start', ({
    inst,
    selected,
    oe
}) => {
    if (!oe.ctrlKey && !oe.metaKey) {
        for (const el of selected) {
            inst.removeFromSelection(el);
        }
        inst.clearSelection();
    }
}).on('move', ({
    changed: {
        removed,
        added
    }
}) => {
    color = sessionStorage.getItem('color');
    for (const el of added) {
        el.classList.remove(...clr);
        el.classList.add('selected');
        el.classList.add(color);
        console.log(el.classList);
    }
    for (const el of removed) {
        el.classList.remove('selected');
    }
}).on('stop', ({
    inst
}) => {
    inst.keepSelection();
});
