document.addEventListener('DOMContentLoaded', function() {
    const tasks = document.querySelectorAll('.task');

    tasks.forEach(task => {
        const checkbox = task.querySelector('input[type="checkbox"]');
        checkbox.addEventListener('change', function() {
            // Get the task ID
            const taskId = task.dataset.id;

            // Determine the checked status
            const checked = checkbox.checked ? 1 : 0;

            // Send an AJAX request to update the task status
            fetch('/update-task/' + taskId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Add CSRF token
                },
                body: JSON.stringify({
                    checked: checked
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Task status updated successfully
            })
            .catch(error => {
                console.error('There was a problem updating the task status:', error);
            });

            // Handle visual changes
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
