
        // Netflix-style Typographic Reveals (ADN)
        gsap.utils.toArray('.reveal-container').forEach((container, i) => {
            const item = container.querySelector('.reveal-item');
            gsap.to(item, {
                y: 0,
                duration: 1.5,
                ease: "expo.out",
                scrollTrigger: {
                    trigger: container,
                    start: "top 85%",
                    onEnter: () => item.classList.add('active'),
                    onLeaveBack: () => item.classList.remove('active'),
                }
            });
        });

        // Text Scrub Animation (Spirit Phrase)
        const scrubWords = document.querySelectorAll('.scroll-reveal-text');
        gsap.to(scrubWords, {
            scrollTrigger: {
                trigger: "#scrub-phrase",
                start: "top 70%",
                end: "top 20%",
                scrub: true,
            },
            opacity: 1,
            color: "#fff",
            fontWeight: "900",
            stagger: 0.1,
            duration: 1
        });

        // Experience Sticky Photo & Pillars
        const pillars = document.querySelectorAll('.culture-pillar');
        const photo = document.querySelector('#experience-photo');

        pillars.forEach((pillar, i) => {
            ScrollTrigger.create({
                trigger: pillar,
                start: "top 50%",
                end: "bottom 50%",
                onEnter: () => {
                    pillar.classList.add('active');
                    // Change photo state based on pillar
                    gsap.to(photo, {
                        filter: `brightness(${0.7 + (i * 0.1)})`,
                        scale: 1 + (i * 0.02),
                        duration: 1.5,
                        ease: "power2.inOut"
                    });
                },
                onLeaveBack: () => {
                    pillar.classList.remove('active');
                }
            });
        });

        // Staggered reveals for headers and containers
        const revealStaggers = document.querySelectorAll('.reveal-stagger');
        revealStaggers.forEach(container => {
            gsap.to(container.children, {
                opacity: 1,
                y: 0,
                duration: 1.5,
                stagger: 0.2,
                ease: 'expo.out',
                scrollTrigger: {
                    trigger: container,
                    start: 'top 90%',
                    toggleActions: "play none none reverse"
                }
            });
            // Also reveal the container itself if it has opacity classes
            gsap.to(container, { opacity: 1, y: 0, duration: 1, ease: 'expo.out', scrollTrigger: { trigger: container, start: 'top 95%' } });
        });

        // Typo Window Reveal
        gsap.from('.typo-window', {
            scrollTrigger: {
                trigger: '.typo-window',
                start: "top 85%",
            },
            width: 0,
            opacity: 0,
            duration: 1.5,
            ease: "expo.out"
        });

        // General reveals
        gsap.utils.toArray('.reveal').forEach(el => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 1.5,
                ease: 'expo.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 90%',
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Counter Animation for Metrics
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            gsap.to(counter, {
                innerText: target,
                duration: 2,
                snap: { innerText: 1 },
                ease: "power2.out",
                scrollTrigger: {
                    trigger: counter,
                    start: "top 90%",
                }
            });
        });

        // Parallax Background
        gsap.to('.mesh-bg', {
            scrollTrigger: {
                trigger: 'body',
                start: 'top top',
                end: 'bottom bottom',
                scrub: 2
			},
            y: 200,
            scale: 1.2,
            opacity: 0.4
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Modal de Postulación logic
        (function() {
            const joinModal = document.getElementById('join-modal');
            const openJoinModalBtn = document.getElementById('open-join-modal-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const successCloseBtn = document.getElementById('success-close-btn');
            const joinTeamForm = document.getElementById('join-team-form');
            const modalFormContent = document.getElementById('modal-form-content');
            const modalSuccessContent = document.getElementById('modal-success-content');
            const cvFile = document.getElementById('cv-file');
            const cvDropzone = document.getElementById('cv-dropzone');
            const filePreview = document.getElementById('file-preview');
            const fileName = document.getElementById('file-name');
            const removeFileBtn = document.getElementById('remove-file-btn');
            const joinModalContainer = document.getElementById('join-modal-container');

            function openModal() {
                joinModal.classList.remove('pointer-events-none');
                gsap.to(joinModal, { opacity: 1, duration: 0.3, ease: "power2.out" });
                gsap.fromTo(joinModalContainer, 
                    { scale: 0.95, y: 20 },
                    { scale: 1, y: 0, duration: 0.4, ease: "back.out(1.5)" }
                );
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                gsap.to(joinModalContainer, { scale: 0.95, y: 20, duration: 0.3, ease: "power2.in" });
                gsap.to(joinModal, { 
                    opacity: 0, 
                    duration: 0.3, 
                    ease: "power2.in",
                    onComplete: () => {
                        joinModal.classList.add('pointer-events-none');
                        document.body.style.overflow = '';
                        joinTeamForm.reset();
                        modalFormContent.classList.remove('hidden');
                        modalSuccessContent.classList.add('hidden');
                        resetFileDropzone();
                    }
                });
            }

            if (openJoinModalBtn) {
                openJoinModalBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal();
                });
            }

            if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
            if (successCloseBtn) successCloseBtn.addEventListener('click', closeModal);

            joinModal.addEventListener('click', (e) => {
                if (e.target === joinModal) {
                    closeModal();
                }
            });

            // CV Dropzone interaction
            if (cvDropzone && cvFile) {
                cvDropzone.addEventListener('click', (e) => {
                    if (!e.target.closest('#remove-file-btn')) {
                        cvFile.click();
                    }
                });

                cvFile.addEventListener('change', (e) => {
                    handleFileSelect(e.target.files[0]);
                });

                ['dragenter', 'dragover'].forEach(eventName => {
                    cvDropzone.addEventListener(eventName, (e) => {
                        e.preventDefault();
                        cvDropzone.classList.add('border-blue-500', 'bg-blue-500/10');
                    }, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    cvDropzone.addEventListener(eventName, (e) => {
                        e.preventDefault();
                        cvDropzone.classList.remove('border-blue-500', 'bg-blue-500/10');
                    }, false);
                });

                cvDropzone.addEventListener('drop', (e) => {
                    const dt = e.dataTransfer;
                    const file = dt.files[0];
                    handleFileSelect(file);
                });
            }

            function handleFileSelect(file) {
                if (!file) return;
                const allowedTypes = ['.pdf', '.doc', '.docx'];
                const extension = '.' + file.name.split('.').pop().toLowerCase();
                if (!allowedTypes.includes(extension)) {
                    alert('Por favor, selecciona un archivo válido (.pdf, .doc, .docx)');
                    resetFileDropzone();
                    return;
                }
                if (file.size > 5 * 1024 * 1024) {
                    alert('El archivo supera el tamaño máximo permitido de 5MB');
                    resetFileDropzone();
                    return;
                }
                const container = new DataTransfer();
                container.items.add(file);
                cvFile.files = container.files;
                fileName.textContent = file.name;
                filePreview.classList.remove('hidden');
            }

            function resetFileDropzone() {
                cvFile.value = '';
                filePreview.classList.add('hidden');
                fileName.textContent = '';
            }

            if (removeFileBtn) {
                removeFileBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    resetFileDropzone();
                });
            }

            // Form Submit transition
            if (joinTeamForm) {
                joinTeamForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    
                    const formData = new FormData(joinTeamForm);
                    console.log('Postulación recibida:', {
                        nombre: formData.get('nombre'),
                        email: formData.get('email'),
                        telefono: formData.get('telefono'),
                        cv: formData.get('cv')
                    });

                    gsap.to(modalFormContent, {
                        opacity: 0,
                        y: -20,
                        duration: 0.3,
                        onComplete: () => {
                            modalFormContent.classList.add('hidden');
                            modalFormContent.style.opacity = '';
                            modalFormContent.style.transform = '';
                            modalSuccessContent.classList.remove('hidden');
                            gsap.fromTo(modalSuccessContent, 
                                { opacity: 0, y: 20 },
                                { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
                            );
                        }
                    });
                });
            }
        })();
