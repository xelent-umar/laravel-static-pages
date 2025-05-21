<script setup>
defineProps({
    message: String,
    name: String,
});
</script>

<template>
    <div v-if="name && name === 'internal_error'">
        <div
            class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 text-left"
            role="alert"
        >
            <svg
                class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
                />
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                <span class="font-medium"> Well this is embarrassing: </span>
                <p class="mt-2">
                    Sorry, this is not working properly. We know about this
                    mistake and are working to fix it.
                </p>
                <p class="mt-2">In the meantime, here is what you can do:</p>
                <ul class="mt-1.5 ml-4">
                    <li class="flex justify-left gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                            />
                        </svg>
                        <div>
                            <strong>Refresh the page</strong> (sometimes this
                            helps).
                        </div>
                    </li>
                    <li class="flex justify-left gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        <div><strong>Try again</strong> in 30 minutes</div>
                    </li>
                    <li class="flex justify-left gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                            />
                        </svg>
                        <div>
                            <strong>Email us</strong> at
                            <a href="mailto:info@xelent.pk">info@xelent.pk</a>
                            and tell us what happened.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div v-else>
        <div v-if="message">
            <p class="text-sm text-red-600" v-text="message"></p>
        </div>
    </div>
</template>
