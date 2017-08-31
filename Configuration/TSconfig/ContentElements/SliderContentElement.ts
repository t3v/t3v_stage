mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vstage_slider {
              title = LLL:EXT:t3v_stage/Resources/Private/Language/locallang_wizard.xlf:contentElements.sliderContentElement.title

              description = LLL:EXT:t3v_stage/Resources/Private/Language/locallang_wizard.xlf:contentElements.sliderContentElement.description

              iconIdentifier = t3v_stage-slider_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vstage_slider
              }
            }
          }

          show := addToList(t3vstage_slider)
        }
      }
    }
  }
}