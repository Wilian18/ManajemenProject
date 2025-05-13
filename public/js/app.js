document.addEventListener('DOMContentLoaded', () => {
    console.log("App.js loaded");

    const form = document.getElementById('task-form');
    const tasksContainer = document.getElementById('tasks-container');

    if (!form || !tasksContainer) {
        console.error("Form atau container tidak ditemukan.");
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const task = {
            nama: formData.get('nama'),
            penerima: formData.get('penerima'),
            tenggat: formData.get('tenggat'),
            prioritas: formData.get('prioritas'),
            status: formData.get('status'),
        };

        const div = document.createElement('div');
        div.className = 'grid grid-cols-5 bg-rose-100 p-2 rounded mb-2';

        div.innerHTML = `
            <div>📝 ${task.nama}</div>
            <div>${task.penerima}</div>
            <div>📅 ${task.tenggat}</div>
            <div><span class="bg-gray-200 px-2 rounded">${task.prioritas}</span></div>
            <div><span class="bg-gray-200 px-2 rounded">${task.status}</span></div>
        `;

        tasksContainer.appendChild(div);
        form.reset();
    });
});
