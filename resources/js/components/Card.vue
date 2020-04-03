<template>
  <card class="border-t-4 card flex items-center p-3 shadow-md" :class="containerClasses">
    <div :class="{'self-start':card.withHeading}">
      <component :is="icon" :class="iconClasses"></component>
    </div>
    <div>
      <h2 v-if="card.withHeading" :class="headingClasses">{{ card.heading}}</h2>
      <p :class="messageClasses" v-if="card.asHtml" v-html="card.message"></p>
      <p :class="messageClasses" v-else v-text="card.message"></p>
    </div>
  </card>
</template>

<script>
import InfoIcon from "./icons/InfoIcon";
import SuccessIcon from "./icons/SuccessIcon";
import WarningIcon from "./icons/WarningIcon";
import DangerIcon from "./icons/DangerIcon";

export default {
  props: [
    "card"

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],

  components: {
    InfoIcon,
    SuccessIcon,
    WarningIcon,
    DangerIcon
  },

  data() {
    return {
      themes: {
        info: {
          color: "blue"
        },
        success: {
          color: "green"
        },
        warning: {
          color: "yellow"
        },
        danger: {
          color: "red"
        }
      }
    };
  },

  computed: {
    icon() {
      return this.card.theme + "-icon";
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
    },

    headingClasses() {
      return `text-lg font-bold text-${this.color}-800 leading-none mb-1`;
    }
  }
};
</script>

<style scoped></style>
