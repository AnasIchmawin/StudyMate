document.addEventListener('DOMContentLoaded', function() {
    const tasks = document.querySelectorAll('.task');

    tasks.forEach(task => {
        const checkbox = task.querySelector('input[type="checkbox"]');
        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                task.style.transform = 'scale(0)';
                task.style.opacity = '0';
                setTimeout(() => {
                    task.classList.add('checked');
                    document.querySelector('.tasks-checked').appendChild(task);
                    setTimeout(() => {
                        task.style.transform = 'scale(1)';
                        task.style.opacity = '1';
                    }, 50);
                }, 200);
            } else {
                task.style.transform = 'scale(0)';
                task.style.opacity = '0';
                setTimeout(() => {
                    task.classList.remove('checked');
                    document.querySelector('.tasks').appendChild(task);
                    setTimeout(() => {
                        task.style.transform = 'scale(1)';
                        task.style.opacity = '1';
                    }, 50);
                }, 300);
            }
            tasks.forEach(task => {
                task.addEventListener('mouseenter', function() {
                    task.style.transform = 'scale(1.015)';
                });

                task.addEventListener('mouseleave', function() {
                    task.style.transform = 'scale(1)';
                });
            });
        });
    });
});