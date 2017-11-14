# -----------------------
# | T3v Stage Constants |
# -----------------------

t3v {
  stage {
    config {
      contentElements {
        sliderContentElement {
          # cat=t3v/stage/config/contentElements/sliderContentElement; type=string; label=The Content Element's container
          container =
        }
      }
    }
  }
}

# === Plugin Constants ===

plugin {
  tx_t3vstage {
    persistence {
      # cat=plugin/tx_t3vstage/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vstage/persistence; type=int+; label=The PID of the storage
      storagePid = 0

      # cat=plugin/tx_t3vstage/persistence; type=boolean; label=Updates reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      # ...
    }

    view {
      # cat=plugin/tx_t3vstage/view; type=string; label=The default path to the layouts
      layoutRootPath = EXT:t3v_stage/Resources/Private/Layouts/

      # cat=plugin/tx_t3vstage/view; type=string; label=The default path to the templates
      templateRootPath = EXT:t3v_stage/Resources/Private/Templates/

      # cat=plugin/tx_t3vstage/view; type=string; label=The default path to the partials
      partialRootPath = EXT:t3v_stage/Resources/Private/Partials/
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">