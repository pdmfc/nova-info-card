<template>
  <card
    class="border-t-4 card flex items-center p-3 shadow-md"
    :class="containerClasses"
  >
    <component :is="icon" :class="iconClasses"></component>
    <p :class="messageClasses">{{ card.message }}</p>
  </card>
</template>

<script>
import InfoIcon from './icons/InfoIcon';
import SuccessIcon from './icons/SuccessIcon';
import WarningIcon from './icons/WarningIcon';
export default {
  props: [
    'card'

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],

  components: {
    InfoIcon,
    SuccessIcon,
    WarningIcon
  },

  data() {
    return {
      themes: {
        info: {
          color: 'blue',
          icon: 'info'
        },
        success: {
          color: 'green',
          icon: 'success'
        },
        warning: {
          color: 'yellow',
          icon: 'warning'
        },
        danger: {
          color: 'red',
          icon: 'warning'
        }
      }
    };
  },

  computed: {
    icon() {
      return this.theme.icon + '-icon';
    },

    theme() {
      return this.themes[this.card.theme];
    },

    color() {
      return this.theme.color;
    },

    containerClasses() {
      return `bg-${this.color}-200 border-${this.color}-600`;
    },

    iconClasses() {
      return `text-${this.color}-600`;
    },

    messageClasses() {
      return `text-${this.color}-800`;
    }
  }
};
</script>

<style scoped></style>
