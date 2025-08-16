const tuerchenTag = document.getElementById("tuerchenTag");
for (let i = 1; i <= 24; i++) {
    let tuerchenFunktion = "";
    if (i === 6) {
        tuerchenFunktion = `onclick="nikolausOeffnen()"`;
    } else if (i === 24) {
        tuerchenFunktion = `onclick="weihnachtenOeffnen()"`;
    } else {
        tuerchenFunktion = `onclick="standardOeffnen(${i})"`;
    }

tuerchenTag.innerHTML += `
    <div class="col-auto">
        <button id="tuerchen-${i}" class="tuerchenButton mt-3 mb-3 fs-5 border-warning btn btn-danger fw-bold" ${tuerchenFunktion}>
            ${i}
        </button>
    </div>
    `;
}

function nikolausOeffnen() {
    alert("Ho Ho Ho! 🎅");
}

function weihnachtenOeffnen() {
    alert("Frohe Weihnachten! 🎄");
}

function standardOeffnen(nummer) {
    alert("Türchen " + nummer + " geöffnet!");
}