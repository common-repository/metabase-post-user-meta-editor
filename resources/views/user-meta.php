<div id="metabase-app" x-data="metabase" x-init="init(<?php esc_attr_e(wp_json_encode($data)); ?>)" class="meta-box-sortables ui-sortable">
  <div id="metabase" class="postbox ">
    <div class="postbox-header" x-on:click="openTab = !openTab">
      <h2 class="px-4 py-2 m-0 text-sm hndle ui-sortable-handle">Meta</h2>
      <div class="handle-actions hide-if-no-js">

        <span class="flex items-center ml-6 mr-3 text-gray-500 h-7">
          <svg class="w-6 h-6 transform -rotate-180" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': openTab, 'rotate-0': !(openTab) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </span>

      </div>
    </div>
    <div class="inside" x-show="openTab">
      <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col mt-8">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
              <div class="overflow-hidden shadow-none ring-1 ring-black ring-opacity-5">


                <table class="w-full divide-y divide-gray-300 table-fixed">
                  <thead style="background: #f0f0f1;">
                    <tr class="">
                      <th scope="col" class="py-3.5 pl-4 w-4/12 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-6">Key</th>
                      <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Value</th>
                      <th scope="col" class="px-4 w-1/12 py-3.5 text-left text-sm font-semibold text-gray-900"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <template x-for="(field, index) in fields" :key="index">
                      <tr class="">
                        <td :class="{'opacity-20' : deleted.includes(index)}" class="py-4 pl-4 pr-4 overflow-auto text-sm font-medium text-gray-700 border-r border-gray-200 whitespace-nowrap sm:pl-6">
                          <pre x-text="field.key"></pre>
                        </td>
                        <td :class="{'opacity-20' : deleted.includes(index)}" class="p-4 overflow-auto text-sm text-gray-700 whitespace-nowrap">
                          <pre x-text="dump(field.value)"></pre>
                        </td>
                        <td x-show="!deleted.includes(index)" class="flex items-center p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap">

                          <a x-on:click.prevent="edit(field)" href="#" class="text-wp-blue hover:text-wp-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            <span class="sr-only"><?php esc_html_e('Edit', 'metabase'); ?></span>
                          </a>

                          <svg x-show="loading == index" class="w-5 h-5 mr-3 -ml-1 animate-spin text-wp-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" style="display: none;">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                          </svg>
                          <a x-on:click.prevent="trash(field, index)" x-show="confirmDelete === index && loading != index" x-on:click.away="confirmDelete = false" href="#" class="text-xs text-red-500 hover:text-red-600"><?php esc_html_e('Confirm', 'metabase'); ?></a>
                          <a x-on:click.prevent="confirmDelete = index" x-show="confirmDelete !== index" href="#" class="text-red-500 hover:text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="sr-only"><?php esc_html_e('Delete', 'metabase'); ?></span>
                          </a>
                        </td>
                      </tr>

                    </template>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div x-cloak @keydown.window.escape="openModal = false" x-show="openModal" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">

    <div x-show="openModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>


    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">

        <div x-show="openModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform rounded-sm shadow-xl bg-gray-50 sm:my-8 sm:w-full sm:max-w-lg sm:p-6" @click.away="openModal = false">

          <div>
            <label for="comment" class="block text-sm font-medium leading-6 text-gray-900">Editing <span x-text="capitalize(currentField.key)"></span></label>
            <div class="mt-2">

              <template x-if="errorCode.length">
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                  <span x-text="errorMessage"></span>
                </div>
              </template>

              <div class="metabase-editor">
                <div class="line-numbers">
                  <span></span>
                </div>
                <div id="metabase-editor"></div>
              </div>
            </div>
          </div>
          <div class="flex items-center mt-5 space-x-2 sm:mt-6">
            <button type="button" class="inline-flex justify-center px-3 py-2 text-sm font-semibold text-white rounded-md shadow-sm cursor-pointer bg-wp-blue hover:bg-wp-blue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-wp-blue" @click="saveMeta">Save Meta</button>
            <svg x-show="savingMeta" class="w-5 h-5 mr-3 -ml-1 animate-spin text-wp-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" style="display: none;">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>


</div>